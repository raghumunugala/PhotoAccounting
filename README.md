PhotoAccounting
===============

Copyright � 2012 Time at Task Aps. All rights reserved. 


One reasonably updated version of this repository is running at: http://images.ebogholderen.dk/1/PhotoAccounting/index.php


Background information about the PhotoAccounting module
===============

The purpose of the Photo Accounting module is to give accountants a very fast way to view images of receipts. The informations on the receipts will already have been typed in by others and the accountant using the Photo Accounting module will in most cases just need to set a four digit account for each receipt.

The goal of this module is that the accountant should be able to view and set the four digit account for each receipt in just 2 seconds. Therefore, it is very important that the images are preloaded so there is no waiting for the next receipt.

This accounting module will be used several hours a day for each accountant so ergonomics and speed is very important.

The code for this module is found here: https://github.com/fosils/PhotoAccounting


Original task description
===============

The following is the original task description, which were paratially completed by the first developer:

I need a fast image viewer using pre-caching to speed up the viewing. The purpose of this image viewer is that accountants should be able to very efficiently go through a lot of images and record information about each.

The images will mostly be of A4 pieces of paper that stand up. On a wide screen, these images should take up all of the left side of the screen from top to bottom. On the right side, the fields seen in the screenshot, should be present.

There are two ways to get the next or previous image:

            Type q (previous) or w (next) in any of the text fields (apart from the text area, or while the OK button has focus, or any other control has focus or if no control has focus.
            There should be an arrow on the middle of the left and right side of the image, which becomes visible if the mouse hovers over them just like seen here.

One of the parameters to your program should be the number of images to pre-cache and post-cache. The default should be that the next 20 images are pre-cached and that the previous 10 images are post-cached. The performance of going to the next image should be so that one can render at least 2 images per second on an average computer in Chrome or Firefox. This speed should be achieve regardless of whether one goes backwards or forwards. Attached, you will find examples of images.

When a new image is rendered the field named "Konto" in the screenshot should receive focus.

If the user pushes down the "a" key, the "konto" field should be filled out with "3120". When the "a" key is released again, the next image should be shown.
If the OK button is clicked, then the next image is shown.

If the images have not yet been downloaded, one should still be able to go to next and previous image. This means that regardless of whether the image has been downloaded or not, one should be able to push w 2 times per second and get to the next image.

Please make the field named "Bilag" state the image id. The ID starts at 1.

Please make a unique URL for each image similar to this: www.localhost.com/index.php?imageID=1924144
                                                                                                             Detailed Requirements:
                               
You do not need to do any verifications of the text boxes, as this is just the first version. If you succeed with this project, I will probably ask you to enhance this viewer with such features in other projects.

Please find 50 random images to test this application with and submit them as a part of your work so I can test the performance.

Your web application should work for latest versions of Chrome and Firefox, please also indicate in your bid whether you believe that it will work in IE (not a requirement).

To reduce the time and cost for this project, the images will just be placed on a server as files named 1.XXX (either JPG or PNG) 2.XXX, 3.XXX etc.

We will assume that all images have the correct size for this project. Later we will do the resizing on the server.

The the beginning of each source file, please state that the copyrights of the code belongs to Andersen Innovation.

Please submit your code as a public GitHub project and transfer the ownership of the code to me immediately.

You need to test your solution carefully, and if I see that you repeatedly send untested stuff, I will refuse to do the testing for you.
