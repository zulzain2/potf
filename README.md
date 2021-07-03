<p align="center"><a href="#"><img src="http://167.99.76.116/images/icons/login.png" width="400"></a></p>

<p align="center">
<a href="https://gitlab.com/ImranShamm/hse-magicx/-/pipelines"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
</p>

## PIPELINE OF THE FUTURE (PotF) - DIGITAL TWIN
The purpose of this PotF system is to solve the problem of the access limitation to the pipeline environment and the unpredicted potential geohazard threat which may affect the performance on the SSGP pipeline site.

PotF System provide the 3D model view of the designated pipeline location and give the easy access and understanding to its surrounding environment. Associate with the resources from sensors on-site, user can use the platform to obtains the real time insight of the actual environment and perform designated simulation for the outcome analytic.

The outcome from simulator help to provide early warning and optimize the decision making when any unpredicted event occur.


## REQUIREMENT
This installation is intended to be used with laragon that comes with preinstall tools needed for the project for local development environment. For other ways the requirement is still the same but you need to configure them yourself.

Just make sure that your Laragon run with below Environment
- PHP >= 7.4 < 8.0
- MySQL 5.7
- Apache 2.4

## INSTALLATION STEPS

**1) Clone**
- SSH : `git clone git@gitlab.com:zulwaqarzain96/potf.git`
- HTTPS : `git clone https://gitlab.com/zulwaqarzain96/potf.git`

**2) run - `composer install`**

**3) Copy .env.example file** 
- change `DB_DATABASE=dev_potf`

**4) run - `php artisan key:generate`**

**5) run - `php artisan storage:link`**

**6) Create database - dev_potf**

**7) run - `php artisan migrate`**

**8) run - `php artisan db:seed --class=UserSeeder`**

**9) You`re Good to go! Run the system and input the 6 Key Passcode "123456"** 
