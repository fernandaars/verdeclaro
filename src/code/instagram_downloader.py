import instaloader
import xml.etree.ElementTree as ET

tree = ET.parse('../assets/xml/farmers.xml')
root = tree.getroot()

for elem in root:
    usr_name = elem[2].text
    print(usr_name)
    if(usr_name is not None):
        root=instaloader.Instaloader()
        print(root.download_profile(usr_name,profile_pic_only=True))