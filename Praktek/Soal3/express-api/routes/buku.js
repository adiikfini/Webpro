var express = require("express");
var router = express.Router();
const Validator = require('fastest-validator');

const { Mbuku } = require('../models');

const v = new Validator();

router.get('/', async (req, res) => {
    const book = await Mbuku.findAll();
    return res.json(book);
});

router.get('/:id', async (req, res) => {
    const id = req.params.id;
    const book = await Mbuku.findByPk();
    return res.json(book || {});
});

router.post('/', async (req, res) => {
    const schema = {
        judul: 'string|nullable',
        pengarang: 'string|nullable',
        penerbit: 'string|nullable',
        tahun: 'number|nullable|integer',
        status: { type: "string", items: "string", enum: ["tersedia", "pre order", "tidak tersedia"] }
    }

    const validate = v.validate(req.body, schema);

    if (validate.length) {
        return res.status(400).json(validate);
    }
    book = await Mbuku.create(req.body);
    res.json(book);

});

router.put('/:id', async (req, res) => {
    const id = req.params.id;

    const buku = await Mbuku.findByPk(id);

    if (!buku) {
        return res.json({ Message: 'Buku tidak ditemukan' });
    }

    const schema = {
        judul: 'string|nullable|optional',
        pengarang: 'string|nullable|optional',
        penerbit: 'string|nullable|optional',
        tahun: 'number|nullable|integer|optional',
        status: { type: "string", items: "string", enum: ["tersedia", "pre order", "tidak tersedia"] }
    }

    const validate = v.validate(req.body, schema);

    if (validate.length) {
        return res.status(400).json(validate);
    }
    book = await Mbuku.update(req.body);

    res.json(book);
});

router.put('/:id', async (req, res) => {
    const id = req.params.id;

    const book = await Mbuku.findByPk(id);

    if (!book) {
        return res.json({ Message: "buku tidak ditemukan" });
    }

    await book.destroy();

    res.json({ Message: "buku dihapus" });

});

module.exports = router;