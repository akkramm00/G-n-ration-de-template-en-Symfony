<!DOTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{% block title%}welcome!{% endblock%}</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/
      2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%229%22>Rond</text></svg>">
    {# Run `composer require symfony/webpack-encore-bundle` to start using Synfony UX #}
    {% block stylesheets %}
    {{ encore_entry_link_tags('app')}}
    {% endblock %}
    
    {% block javascripts %}
    {{ encore_entry_script_tags('app')}}
    {% endblock %}
  </head>
  <body>
    {% block body %}
    <h1>Votre numéro de porte-boheur est le {{ number }}</h1>
    {% endblock %}
  </body>
</html>