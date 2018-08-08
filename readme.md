# KeysStash Laravel
## Backend part of the [KeysStash SPA](https://github.com/laFreeFall/keysstash-vue) built with Laravel

## Installation
Download the project
`git clone lafreefall/keysstash-laravel projectname`

`cd projectname`

1. Copy .env.example, rename to .env and fill with your environment data
`cp .env.example .env`
2. Generate app key
`php artisan key:generate`

3. Install Composer
`composer install`

4. Create database and put its name in your `.env` file

5. Create and populate database tables
`php artisan migrate --seed`

6. Install passport
`php artisan passport:install`

7. Copy Password Grant client from passport and paste it in `keysstash-vue/src/store/modules/users.js` on the 5th line.
`clientSecret: 'YOUR_SECRET',`

8. Host
`php artisan server` to start on [localhost:8000](http://localhost:8000/)

9. Copy your local server url and paste it in `keysstash-vue/src/main.js` on the 20nd line.
`axios.defaults.baseURL = 'YOUR_BACKEND_URL'`

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
