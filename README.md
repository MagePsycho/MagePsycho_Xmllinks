# MagePsycho: Frontend Links Manager

### Introduction:
Frontend Links Manager extension is used to turn on/off the frontend links(top links, footer links, customer navigation links & catalog navigation links) is easier way via backend. 
Moreover it wraps up the complexity of removing those links via xml layout updates.

### Features:
- Upgrade Proof Module.
- Tested for Magento CE 1.5.0.1 - 1.7.0.2 & EE 1.12
- Easy to install & configure.
- Option to enable/disable.
- Option to toggle top links.
- Option to toggle footer links.
- Option to toggle customer navigation links.
- Option to toggle Home links for catalog navigation.

### Installation / Configuration:
- Just copy & paste the 'app' folder provided in the extension zip file to the root of your magento installation.
- After installation go to Admin:
 System >> Configuration >> MagePsycho Extensions >> Frontend Links Manager >> Manage your setting here..

**Example:**
**General Settings**
Enabled = Yes

**Top Links**
Enable / Disable Top links here

**Footer Links**
Enable / Disable Footer links here

**Customer Navigation**
Enable / Disable Customer Navigation links here

**Catalog Navigation**
Enable / Disable Homepage links here

### Notes:
1. Disable the Cache before Installation or Refresh the Cache after Installation.
2. If you get 'Access Denied' error in System > Configuration, then try to logout & re-login.
3. If you have custom theme then try to copy the following files:
  - app/design/frontend/default/default/layout/xmllinks.xml
  - app/design/frontend/default/default/template/xmllinks/*
to
  - app/design/frontend/[your-interface]/[your-theme]/layout/xmllinks.xml
  - app/design/frontend/[your-interface]/[your-theme]/template/xmllinks/*

### Live Demo:
[Frontend](http://miscellaneous.mage-expo.com "Frontend")
[Backend](http://miscellaneous.mage-expo.com/index.php/admin/?module=xmllinks "Backend")

### Changelog:
**0.1.0 - 0.2.0**
- Add/Remove option for My Account > My Applications
- Add/Remove option for My Account > Log Out
- Add/Remove option for My Account > Store Credit (EE only)
- Add/Remove option for My Account > Gift Card (EE only)
- Add/Remove option for My Account > Gift Registry (EE only)
- Add/Remove option for My Account > Reward Points (EE only)
- Add/Remove option for My Account > My Invitations (EE only)
- Add/Remove option for Footer > Orders and Returns
- Add/Remove option for Footer > Rss
- Overriding of catalog navigation template only if Home link is enabled

### Quote / Support:
[Contact Us](http://www.magepsycho.com/contacts)

### More Free/Paid Extensions
[www.magepsycho.com](http://www.magepsycho.com/shop.html)