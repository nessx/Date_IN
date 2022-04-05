    <div class="left-menu">
            <div class="content-logo">
                <div class="logo">
                    <span>API Documentation DateIN</span>
                </div>
                <button class="burger-menu-icon" id="button-menu-mobile">
                <svg width="34" height="34" viewBox="0 0 100 100"><path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"></path><path class="line line2" d="M 20,50 H 80"></path><path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"></path></svg>
            </button>
            </div>
            <div class="mobile-menu-closer"></div>
            <div class="content-menu">
                <div class="content-infos">
                    <div class="info"><b>Creado por:</b> YISUS</div>
                </div>
                <ul>
                    <li class="scroll-to-link active" data-target="content-get-started">
                        <a>INICIO</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-get-characters">
                        <a>Conseguir todos los usuarios</a>
                    </li>
                    <li class="scroll-to-link" data-target="content-errors">
                        <a>Errors</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-page">
            <div class="content-code"></div>
            <div class="content">
                <div class="overflow-hidden content-section" id="content-get-started">
                    <h1>INICIO</h1>
                    <pre>
        API Endpoint

        http://orangeyoutube.local/frmk/
                    </pre>
                    <p>    
                        DateIn es una API en la cual poder hacer peticiones desde la app, DateIn para poder hacer sus gestiones correspondientes.
                    </p>
                    <p>
                        Para usar esta api necesitas una <strong>API key</strong>. Contactame a <a href="mailto:cf17nestor.santana@iesjoandaustria.org">cf17nestor.santana@iesjoandaustria.org</a> para conseguir tu API KEY.
                    </p>
                </div>
                <div class="overflow-hidden content-section" id="content-get-characters">
                    <h2>Conseguir todos los usuarios</h2>
                    <pre><code class="bash">
    # Here is a curl example
    curl \
     -X GET http://orangeyoutube.local/frmk/users
                    </code></pre>
                    <p>
                        Para conseguir todos los usuarios lo puedes hacer mediante una llamada POST siguiendo esta URL:<br>
                        <code class="higlighted break-word">http://orangeyoutube.local/frmk/users</code>
                    </p>
                    <br>
                    <pre><code class="json">
    Result example :

    [
        {
            "id":"1",
            "username":"q.jordi45",
            "name":"quezada",
            "last_name":"perezz",
            "email":"jquezada@example.com",
            "password":"$2y$10$p.6W8RCy8gWPqX3Zsx2ISO5PvGMy8SCg1WcJso6kyuuEyXi79n8Em",
            "description":"hola y adios :)"
        },
        {
            "id":"2",
            "username":"tite",
            "name":"1234","last_name":"ff",
            "email":"ff@i.com",
            "password":"$2y$10$Lpwd38m13oqUcRh1oJwiGeD0UBsG.C4MY0aYM3qYojO6M77GjppJy",
            "description":"fsddfsff"
        },
        {
            "id":"3",
            "username":"tite",
            "name":"1234",
            "last_name":"ff",
            "email":"ff@i.com",
            "password":"$2y$10$D47pUaUPqzTCXSfM\/0TQ7eW.Gn5GN056OY3tQmFPI.FIh0Naf7O62",
            "description":"fsddfsff"
        },
        {
            "id":"4",
            "username":"tite",
            "name":"1234",
            "last_name":"ff",
            "email":"ff@i.com",
            "password":"$2y$10$irVwV9OvwqBBF611fbd2T.bvHxGoP4Fr2650BjGnDz\/gkrNdVodCW",
            "description":"fsddfsff"
        }
    ]
                    </code></pre>
                    <h4>PARAMETROS PARA LA CONSULTA</h4>
                    <!--<table class="central-overflow-x">
                        <thead>
                            <tr>
                                <th>Field</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>secret_key</td>
                                <td>String</td>
                                <td>Your API key.</td>
                            </tr>
                            <tr>
                                <td>search</td>
                                <td>String</td>
                                <td>(optional) A search word to find character by name.</td>
                            </tr>
                            <tr>
                                <td>house</td>
                                <td>String</td>
                                <td>
                                    (optional) a string array of houses:
                                </td>
                            </tr>
                            <tr>
                                <td>alive</td>
                                <td>Boolean</td>
                                <td>
                                    (optional) a boolean to filter alived characters
                                </td>
                            </tr>
                            <tr>
                                <td>gender</td>
                                <td>String</td>
                                <td>
                                    (optional) a string to filter character by gender:<br> m: male<br> f: female
                                </td>
                            </tr>
                            <tr>
                                <td>offset</td>
                                <td>Integer</td>
                                <td>(optional - default: 0) A cursor for use in pagination. Pagination starts offset the specified offset.</td>
                            </tr>
                            <tr>
                                <td>limit</td>
                                <td>Integer</td>
                                <td>(optional - default: 10) A limit on the number of objects to be returned, between 1 and 100.</td>
                            </tr>
                        </tbody>
                    </table> -->
                </div>
                <div class="overflow-hidden content-section" id="content-errors">
                    <h2>Errors</h2>
                    <p>
                        The Westeros API uses the following error codes:
                    </p>
                    <table>
                        <thead>
                            <tr>
                                <th>Error Code</th>
                                <th>Meaning</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>X000</td>
                                <td>
                                    Some parameters are missing. This error appears when you don't pass every mandatory parameters.
                                </td>
                            </tr>
                            <tr>
                                <td>X001</td>
                                <td>
                                    Unknown or unvalid <code class="higlighted">secret_key</code>. This error appears if you use an unknow API key or if your API key expired.
                                </td>
                            </tr>
                            <tr>
                                <td>X002</td>
                                <td>
                                    Unvalid <code class="higlighted">secret_key</code> for this domain. This error appears if you use an API key non specified for your domain. Developper or Universal API keys doesn't have domain checker.
                                </td>
                            </tr>
                            <tr>
                                <td>X003</td>
                                <td>
                                    Unknown or unvalid user <code class="higlighted">token</code>. This error appears if you use an unknow user <code class="higlighted">token</code> or if the user <code class="higlighted">token</code> expired.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="content-code"></div>
        </div>
        <script src="js/script.js"></script>
    </body>

</html>