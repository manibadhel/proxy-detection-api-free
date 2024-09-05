# IP Proxy Detection Script

This example script checks if a user's IP address is using a proxy. It utilizes a free API service to determine the nature of the IP address and provides a visual warning if a proxy is detected. API endpoint can be used in any language.

## Overview

I have created an endpoint: https://api.maninder.net/lookup/?ip=1.1.1.1 to check the IP status wether it's proxied connection or not.

The script performs the following actions:
1. Retrieves the user's IP address from the `$_SERVER` superglobal.
2. Makes a request to a free API endpoint to check if the IP address is a proxy.
3. Parses the API response and displays a message indicating whether or not the IP address is a proxy.

## Features

- Detects if the IP address is a proxy.
- Displays a warning message if a proxy is detected.
- Uses a free, publicly accessible API for proxy detection.

## API Endpoint

The script uses the following free API endpoint: https://api.maninder.net/lookup/?ip=YOUR_IP_ADDRESS


Replace `YOUR_IP_ADDRESS` with the actual IP address you wish to check. The API response includes information about whether the IP address is a proxy.


## Usage

Simply include or run the script in your environment. The script will automatically perform the proxy check and display the result.


## License

This script is provided as-is with no warranties. You are free to use and modify it according to your needs.

## Developer

Maninderpal Singh - a college dropout 😜
## Contact

For any questions or issues, please contact hi@maninder.net or open an issue on the repository.

