# CPSC 471

University of Calgary CPSC 471 (Fall 2021)

To setup this repository to the same state used for the demo:
1) Install Docker ( https://docs.docker.com/engine/install/#server ) and Docker Compose ( https://docs.docker.com/compose/install/ )
2) Use the provided cpsc471.yml to setup the Stack alongside the 3 directories that are the volumes for the containers
3) Use the following credentials to login to various aspects of the website (shown in the format of username:password):
    - phpMyAdmin = admin:E2BQ5XMerTB2iC8gAjWD
    - WordPress Patron view = 8643:hello123
    - WordPress Employee view = 1:password123
    - OpenSSH = admin:lGEoXNgK5sHGh9klA3DS

The following directories are used by the following programs:
- dba0825ae52be4511ef870a2563ae25ed9688447e29f2c91fc9f3f55175ce908 = volume for the openssh server (used to allow SSH / SFTP access to the wordpress source code)
- 16493c27d9075e90dd4ec5a77a6b254bb504a7e0b272eb36182ba841ebb5517c = volume that contains the mysql database (both the one used by wordpress and for storing the custom tables in the library_database database)
- 31a3a0b15a2b43994b03d701faf4905a878355b4f1006d476984f9740a60bf5e = volumes used by wordpress
