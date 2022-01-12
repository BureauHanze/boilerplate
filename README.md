<!-- Boilerplate for WordPress development -->
WordPress login:
Accountname: admin or webbeheer@buerauhanze.nl
Password: welkom01

<!-- Install Gulp with Browsersync, PHP server watch, Sass compiler & minify, JavaScript combine & minify -->
First install node https://nodejs.org/en/

<!-- Install Gulp CLI -->
sudo npm install gulp-cli -g


<!-- Install NPM packages -->
Go to current projectfolder by typing this in the terminal:
cd [projectfolder location]

<!-- Create package.json -->
npm init -y

<!-- Install pakkages (node_modules) -->
npm install gulp browser-sync gulp-connect-php gulp-sourcemaps gulp-sass sass gulp-autoprefixer gulp-cleancss gulp-rename gulp-terser gulp-concat

<!-- Start Gulp in project -->
gulp


----------------------------------------

Install local SSL certificate

<!-- Install openSSL -->
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
brew install openssl

<!-- Go to folder where you want to store the certificates -->
cd ..

<!-- Generate private key -->
openssl genrsa -des3 -out myCA.key 2048

<!-- Generate root certificate -->
openssl req -x509 -new -nodes -key myCA.key -sha256 -days 1825 -out myCA.pem

<!-- Install root certificate on MacOs -->
sudo security add-trusted-cert -d -r trustRoot -k "/Library/Keychains/System.keychain" myCA.pem


<!-- Generate CA-Signed Certificates for localhost -->
openssl genrsa -out localhost.key 2048

<!-- Put the text beluw in a text file with the name: localhost.ext -->
authorityKeyIdentifier=keyid,issuer
basicConstraints=CA:FALSE
keyUsage = digitalSignature, nonRepudiation, keyEncipherment, dataEncipherment
subjectAltName = @alt_names

[alt_names]
DNS.1 = localhost

<!-- Run the command to create localhost.csr -->
openssl req -new -key localhost.key -out localhost.csr

<!-- Run the command to create localhost.crt -->
openssl x509 -req -in localhost.csr -CA myCA.pem -CAkey myCA.key \
-CAcreateserial -out localhost.crt -days 825 -sha256 -extfile localhost.ext


<!-- Example to use localhost.crt with Gulp BrowserSync:  -->
browsersync.init({
    proxy: 'https://boilerplate:8890/',
    https: {
        key: '/Applications/MAMP/Library/OpenSSL/certs/localhost.key',
        cert: '/Applications/MAMP/Library/OpenSSL/certs/localhost.crt',
    }
});


----------------------------------------

<!-- To accept *.local certificates in Chrome -->
1. Click on the lock icon in the browser
2. Click "verbinding is beveiligd"
3. Click "Certificaat is geldig"
4. Drag the certificate icon to your desktop
5. Dubble click this certificate
6. Open keychain app on your mac
7. Search for *.local certificate and open it
8. Click on "Vertrouw"
9. Set option "Gebruik bij dit certificaat" to "Vertrouw altijd"
10. Done.
