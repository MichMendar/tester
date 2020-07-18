# Code challenge version 1

## Requirements

* Docker
* Node

## Run docker

To run docker, you need enter the folder Docker in the root path of project. Please build it via Docker Compose following the next command.

```
docker-compose up -d
```

After that, just you have to import the SQL backup via PHPMyAdmin, here is the URL:

```
PHPMyAdmin --> localhost:8008
```

The SQL file is in folder db, in root path.

Wordpress credentials, is in file info.txt in wordpress folder. The next info is to phpmyadmin access.

```
user: tester_user
pass: testerpass

```

## Install theme dependencies

To install theme dependencies you need enter the theme folder, this folder is in path wordpress/wp-content/themes/stickers. Please to install the dependencies run the next command.

```
npm install
```

Finally, to execute all task to compile CS, JS an Sass, you need run the command

```
gulp
```
