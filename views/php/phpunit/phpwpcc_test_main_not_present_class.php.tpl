<?
require("{{ projectName }}Check.php");
class {{ projectName }}Check{{ service }}NotPresentTest extends {{ projectName }}Check {




   // Check if the given webSiteContent is not containing {{ service }} configuration
   // @params String $html Given html content
   // @return Boolean
   public function {{ projectName }}Check{{ service }}NotPresent($html) {
{% for version, files in acceptedConfig %}
    // Check {{ version }} configuration
    if ({% for key, file in files %}FALSE !== strpos($html, "{{ file }}"){% if loop.last %}) {
    {% else %} ||
    {% endif %} {% endfor %}
    return false;
    }
{% endfor %}
    return true;
  }