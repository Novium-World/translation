import React, { useEffect, useState } from 'react';
import { ServerContext } from '@/state/server';
import TitledGreyBox from '@/components/elements/TitledGreyBox';
import reinstallServer from '@/api/server/reinstallServer';
import { Actions, useStoreActions } from 'easy-peasy';
import { ApplicationStore } from '@/state';
import { httpErrorToHuman } from '@/api/http';
import tw from 'twin.macro';
import { Button } from '@/components/elements/button/index';
import { Dialog } from '@/components/elements/dialog';

export default () => {
    const uuid = ServerContext.useStoreState((state) => state.server.data!.uuid);
    const [modalVisible, setModalVisible] = useState(false);
    const { addFlash, clearFlashes } = useStoreActions((actions: Actions<ApplicationStore>) => actions.flashes);

    const reinstall = () => {
        clearFlashes('settings');
        reinstallServer(uuid)
            .then(() => {
                addFlash({
                    key: 'settings',
                    type: 'success',
                    message: 'Dein Server wird nun neu installiert.',
                });
            })
            .catch((error) => {
                console.error(error);

                addFlash({ key: 'settings', type: 'error', message: httpErrorToHuman(error) });
            })
            .then(() => setModalVisible(false));
    };

    useEffect(() => {
        clearFlashes();
    }, []);

    return (
        <TitledGreyBox title={'Server neu installieren'} css={tw`relative`}>
            <Dialog.Confirm
                open={modalVisible}
                title={'Soll dein Server wirlich neu installiert werden?'}
                confirm={'Ja'}
                onClose={() => setModalVisible(false)}
                onConfirmed={reinstall}
            >
                Dein Server wird gestoppt und während dieses Vorgangs werden möglicherweise einige Dateien gelöscht oder geändert. Möchten du wirklich fortfahren?
            </Dialog.Confirm>
            <p css={tw`text-sm`}>
                Durch eine Neuinstallation deines Servers wird dieser gestoppt und anschließend das Installationsskript erneut ausgeführt, mit dem er ursprünglich eingerichtet wurde.&nbsp;
                <strong css={tw`font-medium`}>
                    Während dieses Vorgangs können einige Dateien gelöscht oder geändert werden. Bitte sichere deine Daten, bevor du fortfährst.
                </strong>
            </p>
            <div css={tw`mt-6 text-right`}>
                <Button.Danger variant={Button.Variants.Secondary} onClick={() => setModalVisible(true)}>
                    Server neu installieren
                </Button.Danger>
            </div>
        </TitledGreyBox>
    );
};
