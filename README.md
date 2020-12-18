<h1>How to install the system</h1>

<ul>
    <li>Clone the repository with <strong>git clone</strong></li>
    <li>Copy <strong>.env.example</strong> file to <strong>.env</strong> and edit database credentials there</li>
    <li>Run <strong>composer install</strong></li>
    <li>Run <strong>php artisan key:generate</strong></li>
    <li>Run <strong>php artisan migrate --seed</strong> (it has some seeded data for your testing)</li>
    <li>That's it: launch the main URL. Run <strong>php artisan serve</strong></li>
    <li>You can login to icashs with default credentials <strong>admin@admin.com</strong> - <strong>adminadmin</strong></li>
</ul>
