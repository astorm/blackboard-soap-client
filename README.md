# blackboard-soap-client

A PHP client library for Blackboard 9's Soap API.  Project goals include

- Providing more transparency into WS-Security Header
- Without requiring users to generate their own headers or parameter XML
- Use code generation to provide transparency into methods and their parameters
- Enough documentation of Blackboard objects to use them (i.e. Filters)

If you're looking for instructions on how to make an API calls, the three step Register, Login, Call process is documented in [the Wiki](https://github.com/astorm/blackboard-soap-client/wiki).


Thanks To
--------------------------------------------------
The transport layer of this project is based on the library open sourced by [St. Edwards](https://github.com/stedwards), yay open source!

In the meantime you're probably looking for [this](https://github.com/stedwards/Blackboard-Web-Services-PHP-Library) or maybe [this](https://github.com/blackboard/BBDN-Web-Service-Python-Sample-Code).