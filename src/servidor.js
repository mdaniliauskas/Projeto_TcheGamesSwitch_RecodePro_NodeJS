const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const cors = require('cors');
const conexao = require('./bancodados/conexao')

app.use(cors({origin: 'http://localhost:3000'}));

app.use(bodyParser.urlencoded({ extend: true}));
app.use(express.json());




app.get('/selecttodos', (req, res) => {
    conexao.query("SELECT * FROM produtos;", (error, result) => {
        res.json(result);  
    })
})


app.get('/selectconsoles', (req, res) => {
    conexao.query("SELECT * FROM produtos where categoria='consoles';", (error, result) => {
        res.json(result);  
    })
})

app.get('/selectjogos', (req, res) => {
    conexao.query("SELECT * FROM produtos where categoria='jogos';", (error, result) => {
        res.json(result);  
    })
})

app.get('/selectacessorios', (req, res) => {
    conexao.query("SELECT * FROM produtos where categoria='acessorios';", (error, result) => {
        res.json(result);  
    })
})



app.get('/selectacessorios', (req, res) => {
    conexao.query("SELECT * FROM produtos where categoria='acessorios';", (error, result) => {
        res.json(result);  
    })
})





app.listen(3001);