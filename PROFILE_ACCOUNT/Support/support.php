<?php

include "../../backend/session.php";

$menu = "support";

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>
Support - ChillZone
</title>

<link
href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Alatsi&display=swap"
rel="stylesheet"
>

<link
rel="stylesheet"
href="support.css"
>

</head>

<body>

<div class="settings-container">

    <?php include "../../sidebar.php"; ?>

    <div class="settings-content">

        <a
        href="../Profile/Profile_Menu/profile-menu.php"
        class="back-link"
        >
            ← Back to Profile
        </a>

        <h1>
            Support
        </h1>

        <!-- HELP CENTER -->

        <div class="input-group">

            <label>
                Help Center
            </label>

            <details class="support-dropdown">

                <summary>
                    If you experience any issues on the website,
                    please contact the appropriate team...
                </summary>

                <div class="dropdown-content">

                    <div class="contact-card">

                        <h3>Hipster Team</h3>

                        <p>
                            Website Design<br>
                            UI / UX Appearance<br>
                            Layout Issues<br>
                            Visual Bugs
                        </p>

                    </div>

                    <div class="contact-card">

                        <h3>Hustler Team</h3>

                        <p>
                            General Information<br>
                            Suggestions & Feedback<br>
                            Partnership<br>
                            Customer Assistance
                        </p>

                    </div>

                    <div class="contact-card">

                        <h3>Hacker Team</h3>

                        <p>
                            Website Features<br>
                            System Bugs<br>
                            Login Problems<br>
                            Database Issues
                        </p>

                    </div>

                </div>

            </details>

        </div>

        <!-- CONTACT -->

        <div class="input-group">

            <label>
                Contact Us
            </label>

            <details class="support-dropdown">

                <summary>
                    Team Contacts
                </summary>

                <div class="dropdown-content">

                    <div class="contact-card">

                        <h3>Hipster Team</h3>

                        <p>

                            0856-0015-4164<br>
                            0812-2895-2618

                        </p>

                    </div>

                    <div class="contact-card">

                        <h3>Hustler Team</h3>

                        <p>

                            0821-2426-9878<br>
                            0856-0015-4164<br>
                            0822-4113-3234

                        </p>

                    </div>

                    <div class="contact-card">

                        <h3>Hacker Team</h3>

                        <p>

                            0812-2895-2618<br>
                            0822-4113-3234<br>
                            0821-2426-9878

                        </p>

                    </div>

                </div>

            </details>

        </div>

    </div>

</div>

</body>
</html>