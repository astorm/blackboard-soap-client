# blackboard-soap-client

A PHP client library for Blackboard 9's Soap API.  Project goals include

- Providing more transparency into WS-Security Header
- Without requiring users to generate their own headers or parameter XML
- Use code generation to provide transparency into methods and their parameters
- Enough documentation of Blackboard objects to use them (i.e. Filters)

If you're looking for instructions on how to make an API calls, the three step Register, Login, Call process is documented in [the Wiki](https://github.com/astorm/blackboard-soap-client/wiki).

Add to Composer
--------------------------------------------------
You're just a simple require away 

	"require": {
		"pulsestorm/blackboard-soap-client": "0.2.0"
	}

Thanks To
--------------------------------------------------
The transport layer of this project is based on the library open sourced by [St. Edwards](https://github.com/stedwards), and kudos to Blackboard for [getting more code online](https://github.com/blackboard/BBDN-Web-Service-Python-Sample-Code).