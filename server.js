const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');
const beneficiariosRoutes = require('./routes/beneficiariosRoutes');

const app = express();
const PORT = process.env.PORT || 3000;

app.use(cors());
app.use(bodyParser.json());

app.use('/api/beneficiarios', beneficiariosRoutes);

app.listen(PORT, () => {
  console.log(`Servidor rodando na porta ${PORT}`);
});
