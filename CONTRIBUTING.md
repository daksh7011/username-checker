# Contributing

When contributing to this repository, please first discuss the change you wish 
to make via issue,email, or any other method with the maintainers of this repository 
before making a change.
Alternatively you can also contact maintainer on [Telegram] (https://t.me/daksh7011) 
or [Email] (mailto:me@daksh7011.com)
>NOTE: Always push to **dev** branch and create merge request afterwards.

## Getting Started
  Follow steps below to get started with development or contribution.
  >Note: dev branch can be ahead of master due to active developments.

  **Please make sure you have been added as developer by maintainer in Repository**
  1.  Open Terminal
  2. `mkdir username-checker`
  3. `cd username-checker`
  4. Initialize a local git repo`git init`
  5. Add remote `git remote add origin https://gitlab.com/daksh7011/username-check.git`
  6. Change local branch to dev `git checkout -b dev`
  6. Pull repo from dev branch`git pull origin dev`
  7. Set your name for commits `git config --global user.name "YourNameGoesHere"`
  8. Now set your email `git config --global user.email you@domainName.extention`

    >Make sure that you have added remote origin by running `git remote -v`

  **Thats all!** Now you must have a properly configured an cloned repository.
  
## Details about files
    * css/styles.css -> stylesheet for index page
    * js/javascript.js -> javascript functions for showing result and many more things.
    * includes/config.php
        1. configuration data about global constants
        2. website meta
    * includes/social.existence.class.php -> 
        1. browser agent meta
        2. websites array that defines domains and url for checking the existence of username on diffent sites.
            explanation
            ```
            array('domain' => 'instagram.com', //website
                'url' => 'https://www.{domain}/{username}/', //url to check for existence
                'agent' => 'chrome') //browser agent
            ``
        3. other functions that are required in multiple files. ie, http_status(), get_existence, website_url etc.
    * existence.php -> fetche data about existence and converts it into json.
    * index.php -> this file has UI of the project. also this displays result of the username existence

## Pushing to Dev Branch
   Follow steps below to start pushing changes you have made into dev branch

   **Please make sure you have been added as developer by maintainer in Repository**
   
   1. In terminal in **username-checker** folder , `git push origin dev`
   2. Enter Your username and password for gitlab
   3. Check for success message in terminal
   4. After successful push, login to your gitlab account in browser.
   5. Open [repository](https://gitlab.com/daksh7011/username-checker)
   6. You will see a notice on top to create merge request.
   7. Create merge request and wait for maintainer to accept it and merge it with master branch.
       
Always feel free to create issues related to this project.
**Good luck**

Last updated on 07/28/2018: 00:33 by [Daksh](https://gitlab.com/daksh7011)