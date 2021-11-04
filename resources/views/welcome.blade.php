<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Api Vesti</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../docs/css/theme-default.style.css" media="screen">
    <link rel="stylesheet" href="../docs/css/theme-default.print.css" media="print">
    <script src="../docs/js/theme-default-3.7.0.js"></script>

    <link rel="stylesheet" href="//unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="//unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>
    <script>
        hljs.highlightAll();
    </script>


</head>

<body data-languages="[&quot;javascript&quot;]">
    <a href="#" id="nav-button">
        <span>
            MENU
            <img src="../docs/images/navbar.png" alt="navbar-image" />
        </span>
    </a>
    <div class="tocify-wrapper">
        <div class="lang-selector">
            <a href="#" data-language-name="javascript">javascript</a>
        </div>
        <div class="search">
            <input type="text" class="search" id="input-search" placeholder="Search">
        </div>
        <ul class="search-results"></ul>

        <ul id="toc">
        </ul>
        <ul class="toc-footer" id="last-updated">
            <li>Last updated: November 04 2021</li>
        </ul>
    </div>
    <div class="page-wrapper">
        <div class="dark-box"></div>
        <div class="content">
            <h1>Introduction</h1>
            <p>This documentation is intended to provide all the information you need to work with our API.
                For simple access via Front access: <a href="{{ url('/pessoas') }}">Click here</a></p>
            <aside>As you scroll, you'll see code examples for working with the API in Javascript languages in the dark
                area to the right (or as part of the content on mobile).</aside>
            <blockquote>
                <p>Base URL</p>
            </blockquote>
            <pre><code class="language-yaml"><p>{{ Request::url() }}</p></code></pre>
            <h1 id="endpoints">Endpoints Web Interface</h1>
            <h2><a href="{{ url('/pessoas') }}">GET /pessoas</a></h2>
            <p>
            </p>

            <span>
                <blockquote>Example request:</blockquote>

                <pre><code class="language-javascript"></code></pre>
            </span>
            <h3>
                Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>/pessoas/categoria</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
            <p></p>
            <h2><a href="{{ url('/pessoas/categoria') }}">GET /pessoas/categoria</a></h2>
            <p>
            </p>

            <span>
                <blockquote>Example request:</blockquote>

                <pre><code class="language-javascript"></code></pre>
            </span>
            <h3>
                Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>/pessoas</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
            <p></p>


            <h1 id="endpoints">Endpoints API</h1>

            <h2>GET /pessoas</h2>

            <p>
            </p>

            <span>
                <blockquote>Example request:</blockquote>

                <pre><code class="language-javascript">const url = new URL(
        "{{ Request::url() }}/api/pessoas"
    );

    const headers = {
        "Content-Type": "application/json",
        "Accept": "application/json",
    };
    fetch(url, {
        method: "GET",
        headers,
    }).then(response =&gt; response.json());</code></pre>
            </span>
            <h3>
                Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>/api/pessoas</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
            <p></p>

            <h2>GET api/pessoas/categoria</h2>

            <p>
            </p>



            <span>
                <blockquote>Example request:</blockquote>

                <pre><code class="language-javascript">const url = new URL(
        "{{ Request::url() }}/api/pessoas/categoria"
    );

    const headers = {
        "Content-Type": "application/json",
        "Accept": "application/json",
    };

    fetch(url, {
        method: "GET",
        headers,
    }).then(response =&gt; response.json());</code></pre>
            </span>
            <h3>
                Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>api/pessoas/categoria</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
            <p>
            </p>

            <h2>GET api/pessoa/{codigoPessoa}</h2>

            <p>
            </p>



            <span>
                <blockquote>Example request:</blockquote>


                <pre><code class="language-javascript">const url = new URL(
        "{{ Request::url() }}/api/pessoa/1"
    );

    const headers = {
        "Content-Type": "application/json",
        "Accept": "application/json",
    };

    fetch(url, {
        method: "GET",
        headers,
        body: JSON.stringify(body),
    }).then(response =&gt; response.json());</code></pre>
            </span>
            <h3>
                Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>/api/pessoa/{codigoPessoa}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
            <p>
                <b><code>codigoPessoa</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                <br>
            </p>


            <h2>GET api/pessoa/categoria/{codigoPessoa}</h2>

            <p>
            </p>



            <span>
                <blockquote>Example request:</blockquote>


                <pre><code class="language-javascript">const url = new URL(
        "{{ Request::url() }}/api/pessoa/categoria/1"
    );

    const headers = {
        "Content-Type": "application/json",
        "Accept": "application/json",
    };

    fetch(url, {
        method: "GET",
        headers,
        body: JSON.stringify(body),
    }).then(response =&gt; response.json());</code></pre>
            </span>
            <h3>
                Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
                <small class="badge badge-green">GET</small>
                <b><code>/api/pessoa/categoria/{codigoPessoa}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
            <p>
                <b><code>codigoPessoa</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                <br>
            </p>

            <h2>POST api/pessoa/create</h2>

            <p>
            </p>



            <span>
                <blockquote>Example request:</blockquote>


                <pre><code class="language-javascript">const url = new URL(
        "{{ Request::url() }}/api/pessoa/1"
    );

    const headers = {
        "Content-Type": "application/json",
        "Accept": "application/json",
    };
    let body= {
        "nome":Jorge da Silva
        "email":jorge@terra.com.br
    }
    fetch(url, {
        method: "GET",
        headers,
        body: JSON.stringify(body),
    }).then(response =&gt; response.json());</code></pre>
            </span>
            <h3>
                Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
                <small class="badge badge-black">POST</small>
                <b><code>api/produto/create</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
            <p>
                <b><code>nome</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <br>
                <b><code>email</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <br>
            </p>

            <h2>POST or PUT api/pessoa/update/{codigo}</h2>

            <span>
                <blockquote>Example request:</blockquote>


                <pre><code class="language-javascript">const url = new URL(
        "{{ Request::url() }}api/pessoa/update/1"
    );

    const headers = {
        "Content-Type": "application/json",
        "Accept": "application/json",
    };

    let body{
        'nome':'Flavia Monteiro',
        'email':'flavia@globo.com',
        'categoria' => 3 | 'categoria' => 'Normal'
    };

    fetch(url, {
        method: "PUT" | method: "POST",
        headers,
    }).then(response =&gt; response.json());</code></pre>
            </span>
            <h3>
                Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
                <small class="badge badge-black">POST</small><small class="badge badge-darkblue">PUT</small>
                <b><code>api/pessoa/update/{codigoPessoa}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
            <p>
                <b><code>CodigoPessoa</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                <br>
            <h4 class="fancy-heading-panel"><b>Body Parameters <i style="color: green">(required)</i></b></h4>
            <p>
                <b><code>nome</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <br>
                <b><code>email</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <br>
                <b><code>categoria</code></b>&nbsp;&nbsp;<small>string|number</small> &nbsp;
                <br>
            </p>
            </p>

            <h2>POST or PATCH api/pessoa/update/{codigo}</h2>

            <span>
                <blockquote>Example request:</blockquote>


                <pre><code class="language-javascript">const url = new URL(
        "{{ Request::url() }}api/pessoa/update/1"
    );

    const headers = {
        "Content-Type": "application/json",
        "Accept": "application/json",
    };

    let body{
        'nome':'Flavia Monteiro',
        'email':'flavia@globo.com',
        'categoria' => 3 | 'categoria' => 'Normal'
    };

    fetch(url, {
        method: "PATCH" | method: "POST",
        headers,
    }).then(response =&gt; response.json());</code></pre>
            </span>
            <h3>
                Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
                <small class="badge badge-black">POST</small><small class="badge badge-purple">PATCH</small>
                <b><code>api/pessoa/update/{codigoPessoa}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
            <p>
                <b><code>CodigoPessoa</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                <br>
            <h4 class="fancy-heading-panel"><b>Body Parameters <i style="color: #C9B624">(one required)</i></b></h4>
            <p>
                <b><code>nome</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <br>
                <b><code>email</code></b>&nbsp;&nbsp;<small>string</small> &nbsp;
                <br>
                <b><code>categoria</code></b>&nbsp;&nbsp;<small>string|number</small> &nbsp;
                <br>
            </p>
            </p>
            <h2>POST or DELETE api/pessoa/delete/{codigo}</h2>

            <span>
                <blockquote>Example request:</blockquote>


                <pre><code class="language-javascript">const url = new URL(
        "{{ Request::url() }}api/pessoa/delete/{codigoPessoa}"
    );

    const headers = {
        "Content-Type": "application/json",
        "Accept": "application/json",
    };

    fetch(url, {
        method: "DELETE" | method: "POST",
        headers,
    }).then(response =&gt; response.json());</code></pre>
            </span>
            <h3>
                Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
                <small class="badge badge-black">POST</small><small class="badge badge-red">DELETE</small>
                <b><code>api/pessoa/delete/{codigoPessoa}</code></b>
            </p>
            <h4 class="fancy-heading-panel"><b>URL Parameters <i style="color: green">(required)</i></b></h4>
            <p>
                <b><code>CodigoPessoa</code></b>&nbsp;&nbsp;<small>number</small> &nbsp;
                <br>
            </p>

        </div>
        <div class="dark-box">
            <div class="lang-selector">
                <a href="#" data-language-name="javascript">javascript</a>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            var exampleLanguages = ["javascript"];
            setupLanguages(exampleLanguages);
        });
    </script>
</body>

</html>
