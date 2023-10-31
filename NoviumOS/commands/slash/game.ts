
export default interface Translation {
    readonly name: string;
    readonly description: string;
    readonly option_game_name: string;
    readonly option_game_description: string;
    readonly option_game_choice_chess: string;
    readonly option_opponent_name: string;
    readonly option_opponent_description: string;
}

export const EN: Translation = {
    name: "game",
    description: "Starts a new game",
    option_game_name: "game",
    option_game_description: "The game that you want to play",
    option_opponent_name: "opponent",
    option_opponent_description: "The player that you want to play with",
    option_game_choice_chess: "Chess"
}

export const DE: Translation = {
    name: "spielen",
    description: "Ein Spiel erstellen",
    option_game_name: "spiel",
    option_game_description: "Das Spiel, welches du erstellen willst",
    option_opponent_name: "gegner",
    option_opponent_description: "Der Spieler mit dem du es spielen willst",
    option_game_choice_chess: "Schach"
}
