#Website wozki-sadownicze.pl
Website company operating in the agricultural sector.

![screenshot](https://cloud.githubusercontent.com/assets/12084504/17833731/27c40864-6726-11e6-96e6-1170ac115847.jpg)

#Build website
The website was created in the ```dist``` folder.

##Steps to create a website
Follow these steps to open a ready-made website. The finished product will be in the folder ```dist```.

- ```git clone git@github.com:kargolsan/wozki-sadownicze.pl.git website```
- ```cd website```
- ```npm install```
- ```bower install```
- ```npm start```
- ```composer install``` in backend directory

To create compressed, production-ready assets, run ```npm run build```.

If you have errors during the above steps, install Python 2.7 and follow the instructions of the program Cmder.

##Configuration
- In folder backend change file name ```.env_example``` to ```.env```
- configuration your ```.env``` file
- Set path for post request of php from contact form in ```src/assets/js/contactForm.js``` file to ```send_email.php```




