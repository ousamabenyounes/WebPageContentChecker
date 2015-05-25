{% block content %}
<div id="sse2">
    <div id="sses2">
        <ul>
            <li><a href="install.php">[ CONFIG PHPWPCC ] </a></li>
            <li><a href="groupUrlUpdate.php">[ PORTAILS ] </a></li>
            <li><a href="serviceUpdate.php">[ SERVICES ] </a></li>
            <li><a href="tests.php">[ TESTS RESULTS ] </a></li>
            {% for service, serviceConfig in services %}<li><a href="tests.php?service={{ service }}">{% if loop.first %} [ {% endif %}{{ service }}{% if loop.last %} ] {% endif %}</a></li>{% endfor %}
        </ul>
    </div>
</div>
{% endblock %}