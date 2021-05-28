const express = require('express');
const app = express()
const swaggerUI = require('swagger-ui-express');
const YAML = require('yamljs');

const swaggerDocument = YAML.load('./swagger/api/openapi_affinda.yaml');

app.use('/api-docs' , swaggerUI.serve , swaggerUI.setup(swaggerDocument));

app.listen(3001 , ()=> 
{
    console.log('running')
})