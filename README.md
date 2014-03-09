# O'Neill

O'Neill is a template for managing WordPress development projects with Git and Composer.

## Premise

Version control your code through Git but without including WordPress or any dependent plugins and themes, leaving that to Composer. The basic premise is thus;
* Your composer.json, custom plugins/themes are tracked by Git
* Setting up your WordPress install, and installing required plugins, are handled by Composer

## Usage

1. Clone or download this repo
1. Get rid of the .git directory (if you cloned) to remove the template's history
1. Open up .gitignore and uncomment lines 6 and 10-15
1. Remove the example plugins from composer.json (DON'T remove WordPress)
1. `composer install` to install WordPress and any dependent plugins/themes
1. `git init`
1. `git add *`
1. `git commit -m "First commit"`
1. Develop you project, adding your custom plugins/themes as relevant
1. Update .gitignore to make sure that your custom code isn't ignored

Once you've got a working project, deploying it elsewhere should be as easy as;
`git clone git@gitremote.com:your-project.git your-project
cd your-project
composer install`

Included in this template's composer.json are two excellent plugins from @johnbillion to demonstrate how you can include your dependent plugins

## O'Neill?

What is a developer to do when he can't think of a name for his little project? Yes, that's right, leverage his love of sci-fi franchise Stargate. O'Neill is named after [Colonel Jack O'Neill of SG-1](https://en.wikipedia.org/wiki/Jack_O'Neill), because geek.

## Credits

Kudos to the [Roots primer on Composer & WordPress](http://roots.io/using-composer-with-wordpress/) for the inspiration.