 var path = (("https:" == document.location.protocol) ? "https://databroker.coremotives.com/databroker.js?version=2" : "http://cdn.coremotivesmarketing.com/databroker.js");

  document.write(unescape("%3Cscript src='" + path + "' type='text/javascript'%3E%3C/script%3E"));

  try {

                var coreMotives = new DataBroker();

                coreMotives.customerId = "b56c732d-1fa0-e111-afe2-00155d323bb1";

                coreMotives.instanceId = 970;

                coreMotives.trackPageView();

  } catch (e) { }