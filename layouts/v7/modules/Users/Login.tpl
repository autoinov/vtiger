{strip}
<style>

    body {
        background: url(layouts/v7/resources/Images/login-background.jpg);
        background-position: center;
        background-size: cover;
        width: 100%;
        background-repeat: no-repeat;
    }
    .loginDiv {
        max-width: 380px;
        margin: 100px auto;
        padding: 20px;
        border-radius: 4px;
        box-shadow: 0 0 10px gray;
        background-color: #FFFFFF;
        text-align: center;
    }
    .group {
        margin: 20px 0;
        text-align: left;
    }
    input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }
    .button {
        width: 100%;
        padding: 10px;
        background-color: #35aa47;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
    }
    .button:hover {
        background-color: #2b8a3e;
    }
</style>

<div class="loginDiv">
    <form method="POST" action="index.php">
        <input type="hidden" name="module" value="Users"/>
        <input type="hidden" name="action" value="Login"/>

        <div class="group">
            <input id="username" type="text" name="username" placeholder="Username" required>
        </div>
        <div class="group">
            <input id="password" type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="button">Sign in</button>
    </form>
</div>
{/strip}