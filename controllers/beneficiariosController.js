const Beneficiario = require('../models/beneficiario');

exports.getAll = (req, res) => {
  Beneficiario.getAll((err, results) => {
    if (err) return res.status(500).send(err);
    res.json(results);
  });
};

exports.create = (req, res) => {
  const data = req.body;
  Beneficiario.create(data, (err, results) => {
    if (err) return res.status(500).send(err);
    res.json({ id: results.insertId, ...data });
  });
};

exports.update = (req, res) => {
  const id = req.params.id;
  const data = req.body;
  Beneficiario.update(id, data, (err) => {
    if (err) return res.status(500).send(err);
    res.send("Atualizado com sucesso");
  });
};

exports.delete = (req, res) => {
  const id = req.params.id;
  Beneficiario.delete(id, (err) => {
    if (err) return res.status(500).send(err);
    res.send("Excluído com sucesso");
  });
};
