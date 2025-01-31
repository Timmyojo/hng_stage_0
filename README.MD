## Project Description
*This API is designed as the solution for the HNg12 Backend Stage 0 task. It returns below information in JSON format.*

### The API endpoint returns:
- My registered email address.
- The current datetime in ISO 8601 format.
- The Github repository for the api.

### Tech Stack
- PHP 8

## To run locally
- Ensure you have the following installed: 
PHP,
Git

1. Clone the repo. 
git clone https://github.com/Timmyojo/hng_stage_0.git
cd hng_stage_0

2. Start the server, to run the api locally.
php -S localhost:8000 index.php

4. Test the API
Once the server is running, open your browser or use Postman/cURL to send a GET request to:
http://localhost:8000

5. Expected Response
```json
{
  "email": "ojobabatundetimothy@gmail.com",
  "current_datetime": "2025-01-31T21:41:34.000000Z",
  "github_url": "https://github.com/Timmyojo/hng_stage_0"
}
```



### LIVE URL
**GET** https://hng-stage-0-two.vercel.app

### Response Format (`200 OK`)
```json
{
  "email": "ojobabatundetimothy@gmail.com",
  "current_datetime": "2025-01-31T21:41:34.000000Z",
  "github_url": "https://github.com/Timmyojo/hng_stage_0"
} 