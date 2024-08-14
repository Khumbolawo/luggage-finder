# Luggage Finder

This project was done as assignment for my Internet Web Services class at [Malawi University Of Business And Applied Sciences](https://www.mubas.ac.mw/). The web app is designed to allow users to create tickets for their luggage before a flight and allow them to search for their tickets by name and flight number. The app also generates a qrcode for every ticket created.

A requirement for the app was to use [Laravel](https://laravel.com/docs/11.x).

## Setting Up The Project

1. Fork and clone this repository

1. Setup your laravel development environment. More instructions [here](https://laravel.com/docs/11.x/configuration)

1. A full list of the dependencies used are in the `requirements.txt`.

## Things To Add

The project's requirements have been met, but there is more that can be done to improve functionality.

1.  QrCodes are generated but are not currently holding any data
2.  Add error handling to search logic and form creation logic
3.  Make QrCodes render as .png files instead of .xml files