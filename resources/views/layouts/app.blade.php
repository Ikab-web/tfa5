<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel POS Foundations sample application">
    <title>@yield('title', 'POS Foundations') · TFA5</title>
    <style>
        :root{font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",sans-serif;color:#17211b;background:#f4f6f3;font-synthesis:none}*{box-sizing:border-box}body{margin:0}a{color:inherit}.shell{max-width:1120px;margin:auto;padding:0 28px}.topbar{background:#fff;border-bottom:1px solid #e4e9e4}.nav{min-height:76px;display:flex;align-items:center;justify-content:space-between;gap:24px}.brand{font-weight:800;letter-spacing:-.04em;text-decoration:none;font-size:19px}.brand span{color:#548565}.links{display:flex;gap:8px;flex-wrap:wrap}.links a{padding:9px 13px;border-radius:9px;text-decoration:none;color:#536057;font-size:14px;font-weight:600}.links a:hover,.links a.active{background:#edf4ed;color:#28623d}.main{padding-top:52px;padding-bottom:76px}.eyebrow{color:#558262;font-size:12px;font-weight:800;letter-spacing:.14em;text-transform:uppercase}.heading{font-size:clamp(34px,5vw,54px);line-height:1.04;letter-spacing:-.055em;margin:10px 0 14px}.lede{color:#68746b;max-width:630px;line-height:1.7;margin:0}.hero{background:#173d2c;color:white;padding:48px;border-radius:20px;position:relative;overflow:hidden}.hero:after{content:"";position:absolute;width:280px;height:280px;border-radius:50%;border:1px solid #ffffff22;right:-65px;top:-115px;box-shadow:0 0 0 35px #ffffff0c,0 0 0 70px #ffffff08}.hero .eyebrow{color:#9dccaa}.hero .lede{color:#d3e2d7}.hero .heading{max-width:570px}.actions{display:flex;gap:12px;flex-wrap:wrap;margin-top:28px}.button{display:inline-flex;padding:12px 16px;border-radius:10px;background:#d5efda;color:#163b29;text-decoration:none;font-size:14px;font-weight:750}.button.secondary{background:#ffffff17;color:#fff;border:1px solid #ffffff30}.section-head{display:flex;align-items:end;justify-content:space-between;gap:20px;margin:38px 0 16px}.section-head h2{margin:0;font-size:22px;letter-spacing:-.03em}.section-head p{margin:5px 0 0;color:#778178;font-size:14px}.cards{display:grid;grid-template-columns:repeat(3,1fr);gap:14px}.card{background:white;border:1px solid #e5eae4;border-radius:15px;padding:21px}.card-label{font-size:12px;color:#748078;font-weight:700}.card-value{font-size:18px;font-weight:760;margin-top:10px;letter-spacing:-.02em}.table-wrap{overflow:auto;background:white;border:1px solid #e3e9e2;border-radius:15px;margin-top:28px}table{width:100%;border-collapse:collapse;text-align:left;min-width:580px}th{font-size:11px;text-transform:uppercase;letter-spacing:.09em;color:#78837b;background:#f8faf7}th,td{padding:16px 19px;border-bottom:1px solid #edf0eb}td{font-size:14px;color:#344239}tbody tr:last-child td{border-bottom:0}.person{font-weight:700;color:#1d3023}.badge{display:inline-block;padding:5px 9px;border-radius:99px;background:#edf4ed;color:#3d714b;font-size:12px;font-weight:700}.footer{border-top:1px solid #e4e9e4;padding:22px 0;color:#78837b;font-size:13px}.about-grid{display:grid;grid-template-columns:1.2fr .8fr;gap:18px;margin-top:30px}.panel{background:white;border:1px solid #e5eae4;border-radius:15px;padding:24px}.panel h2{font-size:18px;margin:0 0 12px}.panel p{line-height:1.7;color:#657168;margin:0}.steps{padding-left:19px;margin:0;color:#526056;line-height:2}.note{color:#78837b;font-size:13px;margin-top:18px}@media(max-width:700px){.shell{padding:0 18px}.nav{align-items:flex-start;flex-direction:column;padding:17px 0}.links{gap:2px}.links a{padding:8px 9px}.main{padding-top:30px}.hero{padding:30px 25px}.cards{grid-template-columns:1fr}.about-grid{grid-template-columns:1fr}}
    </style>
</head>
<body>
<header class="topbar"><div class="shell nav">
    <a class="brand" href="{{ route('home') }}">counter<span>point</span></a>
    <nav class="links" aria-label="Main navigation">
        <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
        <a class="{{ request()->routeIs('customers.*') ? 'active' : '' }}" href="{{ route('customers.index') }}">Customers</a>
        <a class="{{ request()->routeIs('users.*') ? 'active' : '' }}" href="{{ route('users.index') }}">Users</a>
    </nav>
</div></header>
<main class="shell main">@yield('content')</main>
<footer class="footer"><div class="shell">IT0049 · TFA5 &nbsp; / &nbsp; Laravel POS Foundations</div></footer>
</body>
</html>
