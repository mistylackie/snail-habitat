# Snail Habitat with photo capture
Snail habitat with a Raspberry Pi computer + camera attached to it for capturing a history of photos. The photos post to AWS and display on a web page.

This was project done in a classroom with 22 students. We broke the kids out into groups and created 5 snail habitats. It would be a great project to do school wide too, where you create 1 snail habitat per class. This would allow the entire school to get involved and monitor each others habitats. 

You can follow the project and live habitats at https://www.snailhabitat.com/. I would love to see others habitats, so if you create one, please share it and I would be happy to publish it on snailhabitat.com

## Supplies Used
This will be a list of supplies we used to build the habitats.

## Raspberry Pi Image
This will be the fully functional OS & software we setup on the Raspberry Pi. 

## Python Code
The python code installed on the Raspberry Pi for taking photos and uploading to AWS is at https://github.com/mistylackie/snail-habitat/blob/master/camera.py. If you install the Raspberry Pi image we provided above, it will already have this script installed and ready on the Pi.

## AWS Setup
You will need to setup an S3 bucket on AWS and sub-folders within that bucket for each snail habitat you want to capture photos for. Each sub-folder needs to be viewable for public so the photos can be accessible.

## CRON
If you install the Raspberry Pi image we provided above, it will already have this CRON script setup. It is currently setup to run every hour during daylight times (8am to 7pm). If you want it to run at night, you will need to get a flash for the Pi camera, which we do not have for this project. You can edit thr CRON schedule from the command tool on the Raspberry pi by running crontab -e

## Web Pages
To keep things simple, we set this up on a basic LAMP stack. The design us using Bootstrap and coded in PHP 7. You will need to install composer on your server and install the dependencies using composer. The composer.lock file is included making it easier for you to install the dependencies. Feel free to contact me if you have trouble installing composer or the dependencies.

Edit the config.php file with your AWS settings. To change group names or add more groups, edit the s3-photos.php file
