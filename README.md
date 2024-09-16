<p align="center">
 <img width="100px" src="hdcevents\public\img\hdcevents_logo.svg" align="center" alt="GitHub Readme Stats" />
 <h2 align="center">HDC Events</h2>

> [!NOTE]\
> This project is in the development phase. Therefore, some features may be incomplete or inoperative.
> Created by [@SLeess](https://github.com/SLeess)

## Explanation
This is the repository for the **HDC Events** project, an application designed for learning and applying development techniques. It's a Laravel application that allows the creation, display, and management of events (CRUD) through a registered and associated account.

## Project Screenshots

<a target="_blank" align="center" style="display: inline-block;">
  <img align="left" top="500" width="550" alt="png" src="https://i.imgur.com/zkQEkb2.png">
</a>

<!> A Home page of this project with some previously entered data
<br><br><br>
In the same image, you can see a navbar adapted from Livewire, enabling Login, registration, and configuration of the profile in use, in addition to, of course, using the system's functionalities to register events.
<br><br><br><br>

<a target="_blank" align="center" style="display: inline-block;">
  <img align="left" top="500" width="550" alt="png" src="https://github.com/user-attachments/assets/7d8f0865-89bb-446c-8681-8dd8800b672e">
</a>

<!> Here we can see some events created in the general dashboard without any search filter applied.
<br><br><br>
And yet without the implementation of the subscriber counting system.
<br><br><br><br><br><br><br><br>

<a target="_blank" align="center" style="display: inline-block;">
  <img align="left" top="500" width="550" alt="png" src="https://github.com/user-attachments/assets/70851161-2873-423a-8ec2-3d152641f2cc">
</a>

<!> On this screen, we can see how to create events from all the attributes of the table in the mirrored database.
<br><br><br>
Such of these attributes are as Name, Description, Date of occurrence, additional features present in the event, among others.
<br><br><br><br><br><br>

<a target="_blank" align="center" style="display: inline-block;">
  <img align="left" top="500" width="550" alt="png" src="https://github.com/user-attachments/assets/021b8502-898a-41c8-8f58-4603408c9042">
</a>

<!> And finally, we can see a dashboard for Editing and Deleting records.
<br><br><br>
that is in progress and being adapted to be more intuitive and adapted to UX/UI Design
<br><br><br><br><br><br><br>

<a target="_blank" align="center" style="display: inline-block;">
  <img align="left" top="500" width="550" alt="png" src="https://github.com/user-attachments/assets/26fea487-28cb-4c03-813c-61942c3fa501">
</a>

<!> I am still configuring the features of the Livewire plugin, to adapt the Login system and use it for the project, according to its documentation.
<br><br><br>
This documentation is available at:
#### [AdminLTE - Interface for administrators in Laravel](https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Installation)
<br><br><br>

<h2 style="display: block;"> Features</h2>

- Create, edit, and delete events.
- View individual event details.
- Dashboard to manage events for the authenticated user.
- User authentication to access restricted features.
- Adaptation for different screen sizes, ensuring a responsive experience on mobile devices, tablets, and desktops.
- Attendance confirmation for each user for desired events - **(In progress)**
- Listing of events confirmed by the user as a participant - **(In progress)**
- Filtered search by Dates and Locations - **(In progress)**
- Profile photos for each user incorporated into the page design - **(In progress)**
- Contact with support - **(In progress)**
- Log of past or deleted events - **(In progress)**

## Route Structure

The main routes of the application are defined as follows:

| Method | Path                    | Controller and Action              | Middleware      | Description                                                              |
|--------|-------------------------|-----------------------------------|-----------------|---------------------------------------------------------------------------|
| GET    | `/`                     | `EventController@index`           | -               | Displays the home page with events.                                       |
| GET    | `/events/create`         | `EventController@create`          | `auth`          | Displays the form to create new events.                                   |
| GET    | `/events/{id}`           | `EventController@show`            | -               | Displays the details of a specific event.                                 |
| POST   | `/events`                | `EventController@store`           | -               | Saves a new event to the database.                                        |
| GET    | `/contact`               | `ContactController@index`         | `auth`          | Support contact page.                                                     |
| GET    | `/MyEvents`              | `EventController@dashboard`       | `auth`          | Displays the dashboard with events for the authenticated user.            |
| DELETE | `/events/{id}`           | `EventController@destroy`         | `auth`          | Deletes an event from the database.                                       |
| GET    | `/events/edit/{id}`      | `EventController@edit`            | `auth`          | Displays the event edit form.                                             |
| PUT    | `/events/update/{id}`    | `EventController@update`          | `auth`          | Updates event data in the database.                                       |
| GET    | `/phpinfo`               | Anonymous function                | -               | Displays installed PHP information.                                       |
| GET    | `/dashboard`             | Anonymous View                    | `auth`, `verified` | Displays the default Laravel dashboard (Livewire) - **In adaptation**    |

## Technologies Used

- **Laravel 10**: PHP framework used for the backend.
- **Bootstrap 5**: For styling and responsiveness.
- **Livewire**: Component to facilitate real-time interaction between the frontend and backend.
- **MySQL**: Database used for event and user persistence.
- **IONIC Icons**: Icons used to enhance the interface.

## Requirements

- PHP 8.2 or higher
- Composer
- MySQL
- Node.js (to compile frontend assets)

## Installation
Some instructions to run the project successfully in any environment as long as the above requirements are met.

1. Clone this repository to your local machine:
   ```bash
   git clone https://github.com/SLeess/HDC_Events-Laravel.git
   ```

2. Navigate to the project directory:
   ```bash
   cd hdc-events
   ```

3. Install the PHP dependencies with Composer:
   ```bash
   composer install
   ```

4. Install the frontend dependencies with NPM:
   ```bash
   npm install
   ```

5. Copy the `.env.example` file to `.env` and configure the database:
   ```bash
   cp .env.example .env
   ```

6. Generate the application key:
   ```bash
   php artisan key:generate
   ```

7. Create the database and run the migrations:
   ```bash
   php artisan migrate
   ```

8. Run the seeds to populate the database with test data (optional):
   ```bash
   php artisan db:seed
   ```

## Compiling Assets

To compile the frontend assets (CSS, JS), use Vite:

```bash
npm run dev
```

For production build:

```bash
npm run build
```

## Running the Server

Start the Laravel development server:

```bash
php artisan serve
```

Now you can access the application at `http://localhost:8000`.

## Contact

For more information, contact us through the support page, or send an email to duraesleandro12@gmail.com

---

