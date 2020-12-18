<h1>How to install the system</h1>

<ul>
    <li>Clone the repository with git clone</li>
    <li>Copy .env.example file to .env and edit database credentials there</li>
    <li>Run composer install</li>
    <li>Run php artisan key:generate</li>
    <li>Run php artisan migrate --seed (it has some seeded data for your testing)</li>
    <li>That's it: launch the main URL. Run php artisan serve</li>
    <li>You can login to icashs with default credentials admin@admin.com - adminadmin</li>
</ul>
