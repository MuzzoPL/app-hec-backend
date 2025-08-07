const db = require('../config/db');

const Beneficiario = {
  getAll: (callback) => {
    db.query("SELECT * FROM beneficiarios", callback);
  },
  create: (data, callback) => {
    db.query("INSERT INTO beneficiarios SET ?", data, callback);
  },
  update: (id, data, callback) => {
    db.query("UPDATE beneficiarios SET ? WHERE id = ?", [data, id], callback);
  },
  delete: (id, callback) => {
    db.query("DELETE FROM beneficiarios WHERE id = ?", [id], callback);
  }
};

module.exports = Beneficiario;
