<h1 style="text-align: center;">Login Admin</h1>
<form action="/check_login" method="post" style="max-width: 400px; margin: auto; padding: 1em; border: 1px solid #ccc; border-radius: 1em;">
    <div style="margin-bottom: 1em;">
        <label for="email" style="display: block; margin-bottom: .5em;">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" style="width: 100%; padding: .5em; border: 1px solid #ccc; border-radius: .25em;">
    </div>
    <div style="margin-bottom: 1em;">
        <label for="password" style="display: block; margin-bottom: .5em;">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" style="width: 100%; padding: .5em; border: 1px solid #ccc; border-radius: .25em;">
    </div>
    <div style="text-align: center;">
        <button type="submit" style="padding: .5em 2em; border: none; border-radius: .25em; background-color: #007BFF; color: white; cursor: pointer;">Login</button>
    </div>
    @csrf
</form>