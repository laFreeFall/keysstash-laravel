# KeysStash Laravel
## Backend part of the [KeysStash SPA](https://github.com/laFreeFall/keysstash-vue) built with Laravel

## Available endpoints

| Action          | Request type | Endpoint           | Request data                                                                                                                               | Response                                                                     |
|-----------------|--------------|--------------------|--------------------------------------------------------------------------------------------------------------------------------------------|------------------------------------------------------------------------------|
| Login           | `POST`       | `/oauth/token`     | `name: String` (email), `password: String`                                                                                                 | `access_token`, `refresh_token`                                              |
| Get user info   | `GET`        | `/user`            |                                                                                                                                            | `user: Object` (instance of the user)                                        |
| Register        | `POST`       | `/users/store`     | `name: String`, `email: String`, `password: String`, `password_confirmation: String`                                                       |                                                                              |
| Show games      | `GET`        | `/games`           |                                                                                                                                            | `games: Array` of Game Objects with nested Key Object                        |
| Create game     | `POST`       | `/games`           | `title: String` [, `steam: Boolean`, `steam_game_id: Integer` (FK id on steam_games), `deleted: Boolean`, `link: String`, `image: String`] | `game: Object` (created game)                                                |
| Search game     | `GET`        | `/games/search`    | `q: String`                                                                                                                                | `games: Array` of [appid, title] of the games from steam_games filtered by q |
| Add key         | `POST`       | `/games/{id}/keys` | `game_id: Integer` (FK on games), `body: String`                                                                                           | `key: Object` (created key)                                                  |
| Set key as new  | `POST`       | `/keys/{id}/use`   |                                                                                                                                            | `value: Boolean` (use status of the edited key)                              |
| Set key as used | `DELETE`     | `/keys/{id}/use`   |                                                                                                                                            | `value: Boolean` (use status of the edited key)                              |
