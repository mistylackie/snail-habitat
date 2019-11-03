# Snail Habitat with photo capture
Snail habitat with a Raspberry Pi computer + camera attached to it for capturing a history of photos. The photos post to AWS and display on a web page.

![image](https://www.snailhabitat.com/images/snail-habitats-camera.jpg)

This was project done in a classroom with 22 students. We broke the kids out into groups and created 5 snail habitats. It would be a great project to do school wide too, where you create 1 snail habitat per class. This would allow the entire school to get involved and monitor each others habitats. 

You can follow the project and live habitats at https://www.snailhabitat.com/. I would love to see others habitats, so if you create one, please share it and I would be happy to publish it on snailhabitat.com

## Supplies Used
This will be a list of supplies we used to build the habitats. Coming soon!!

## Raspberry Pi Image
The OS installed is Raspian https://www.raspberrypi.org/downloads/raspbian/. After Raspian is installed on it, create an "images" folder and a "code" folder on the desktop and make the images folder writeable. Save the camera.py file into the code folder and make it executable.

You will also need to install s3cmd on the Raspberry Pi. To do this, open up the command prompt tool and type sudo apt-get install s3cmd and follow the prompts. It will prompt you to enter in your AWS S3 settings so make sure you have AWS S# setup before running this. You can view a list if s3cmd commands from https://s3tools.org/s3cmd-howto

## Python Code
The python code installed on the Raspberry Pi for taking photos and uploading to AWS is at https://github.com/mistylackie/snail-habitat/blob/master/camera.py. Make sure this script is located in the code folder you created on your desktop. You also need to make this file executable so it can be run from your CRON.

## AWS Setup
You will need to setup an S3 bucket on AWS and sub-folders within that bucket for each snail habitat you want to capture photos for. Each sub-folder needs to be viewable for public so the photos can be accessible.

## CRON
To create a scheduled CRON that will run your camera.py script every hour go into the command prompt tool and run crontab -e. Scroll to the bottom and add the following to have your script run every hour during daylight times (8am to 6pm). 

0 8-18 * * * python /home/pi/Desktop/code/camera.py

If you want it to run at night, you will need to get a flash for the Pi camera, which we do not have for this project.

## Web Pages
To keep things simple, we set this up using Bootstrap for design and coded in PHP 7 for connecting to the AWS API for pulling in the S3 images. You will need to install composer on your server and install the dependencies using composer. The composer.lock file is included making it easier for you to install the dependencies. Feel free to contact me if you have trouble installing composer or the dependencies.

Edit the config.php file with your AWS settings. To change group names or add more groups, edit the s3-photos.php file

## Future To Do's
- Install a flash on the Pi camera so we can capture photos at night
- Change CRON to run every 5 minutes in order to capture more photos for a timelapse video

## Gotchas
- If the front of the tubs are not clean, photos will not be as clear. You may need to wipe this down periodically.
- I suggest taping your PI & tub down after you get the camera in the right position. Any little nudge can offset the photo positioning.
- Light coming into the room during different times of the day can affect the photos. Glare, shadows, etc. I suggest finding a spot that has good, consistent light throughout the day.
