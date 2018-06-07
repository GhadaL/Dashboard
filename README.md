# Dashboard

a simple GUI developed for an IOT application

## Details about the IOT Application

This project is an IOT Appplication to know in real time the state of two Switches and the value of a Gas sensor. The Firbase is the central point in this project that allow to synchronize between the LeDs State and the switches state in both the mobile and the web Application. The Raspberry Pi interfaces with the Arduino to read and transmit Data to the Cloud Database and eventually to detect the changes of an attribute on the Firebase Databse and transmit that to Arduino to change the LED state.

You can see the data generated while executing the application : https://console.firebase.google.com/u/1/project/raspberry-data/database/raspberry-data/data

Link to this GUI : https://ghadal.github.io/Dashboard.github.io/
the switches works only when the firebase databse is open.

## Key words
Raspberry pi, Pyhton, Firebase Database, Arduino Uno, Android Application, Web Application, MQ-5 sensor.

##Authors

* **Louremi Ghada**

##License

This project is licensed under the MIT License
