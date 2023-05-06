<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
    <link href='/css/styles.css' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <title>Music School - {% block title %}{% endblock %}</title>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Music Something</a>
            </div>

            <!-- <div class="logo">
            <img src="img/splogo.jpg" alt="logo">
            <p class="intro"></p>
        </div> -->
            <!-- <div class="center-div">
            <div class="sidebar"> -->
            <ul class="nav navbar-nav">
                <li><a href="/owner_login">Home</a></li>
                <li><a href="/owner_teachers">Teachers</a></li>
                <li><a href="/owner_students">Students</a></li>
                <li><a href="/owner_accounts">Clients</a></li>
                <li><a href="/owner_courses">Courses</a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </nav>

    {% block content %}

    {% endblock %}
</div>
<div id="top"></div>
<div id="topright"></div>
<div id="right"></div>
<div id="bottomright"></div>
<div id="bottom"></div>
<div id="bottomleft"></div>
<div id="left"></div>
<div id="topleft"></div>
</body>
</html>