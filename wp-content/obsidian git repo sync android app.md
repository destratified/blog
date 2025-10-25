so the basics of this is the app setup essentially has the same access to the git community repository, so the setup between android and linux is pretty much the same.  
1. with and existing folder already created or if you boot the app for the first time - you need to create a folder (mine required sync existing folder)
2. for this exercise we are going to create a new folder (I use scopes) somewhere in the android fs.
3. i have mine set as obsidian > notes so ill select obsidian again.  that way when we use the git clone, it will add the existing repo folder alongside the notes folder in my case
4. after the folder has been created and you now see the main screen, you need to swipe left to right to access the menu and click the cog
5. add the community repos > search for git and enable.
6. in the android app, to access the commands tab, you will swipe screen from top tp bottom.  this brings up the same menu that ctrl + p does in linux.
7. type git: clone and then you will need to add the url in the following format:
```
https://<user>:<token>@gitea.your.domain:<user>/blog.git
```
8. 