so the basics of this is the app setup essentially has the same access to the git community repository, so the setup between android and linux is pretty much the same.  
1. with and existing folder already created or if you boot the app for the first time - you need to create a folder (mine required sync existing folder)
2. for this exercise we are going to create a new folder (I use scopes) somewhere in the android fs.
3. i have mine set as obsidian > notes so ill select obsidian again.  that way when we use the git clone, it will add the existing repo folder alongside the notes folder in my case
4. after the folder has been created and you now see the main screen, you need to swipe left to right to access the menu and click the cog
5. add the community repos > search for git and enable.
6. go into the settings and add your  username and token to the appropriate sections
7. in the android app, to access the commands tab, you will swipe screen from top tp bottom.  this brings up the same menu that ctrl + p does in linux.
8. type git: clone and then you will need to add the url in the following format:
```
https://gitea.your.domain/<user>/blog.git
```
8. make sure if there was a .obsidian directory in the clone that it is deleted.
9. answer yes to all the prompts.
10. then you should be able to restart the app and see the cloned files in your new folder!
11. but its not working great, but i think I got in now

