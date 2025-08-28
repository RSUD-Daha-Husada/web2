
import express from 'express';
import mongoose from 'mongoose';
import cors from 'cors';
import path from 'path';
import { fileURLToPath } from 'url';
app.use(cors());

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const app = express();

// Tambahkan ini di bagian atas server.js
app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    res.header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
    next();
});

// Middleware
app.use(cors());
app.use(express.json());
app.use(express.static(path.join(__dirname, 'public')));

// CORS tambahan
app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    res.header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
    next();
});

// MongoDB connection
mongoose.connect('mongodb://localhost:27017/hospital_db');

// Doctor Schema
const doctorSchema = new mongoose.Schema({
    name: String,
    title: String,
    specialty: String,
    description: String,
    phone: String,
    email: String,
    education: String,
    experience: String,
    schedule: String,
    image: String
});

const Doctor = mongoose.model('Doctor', doctorSchema);

// Routes
app.get('/api/doctors', async (req, res) => {
    try {
        const doctors = await Doctor.find();
        res.json(doctors);
    } catch (err) {
        res.status(500).json({ message: err.message });
    }
});

app.post('/api/doctors', async (req, res) => {
    const doctor = new Doctor(req.body);
    try {
        const newDoctor = await doctor.save();
        res.status(201).json(newDoctor);
    } catch (err) {
        res.status(400).json({ message: err.message });
    }
});

app.put('/api/doctors/:id', async (req, res) => {
    try {
        const doctor = await Doctor.findById(req.params.id);
        if (!doctor) return res.status(404).json({ message: 'Dokter tidak ditemukan' });
        
        Object.assign(doctor, req.body);
        const updatedDoctor = await doctor.save();
        res.json(updatedDoctor);
    } catch (err) {
        res.status(400).json({ message: err.message });
    }
});

app.delete('/api/doctors/:id', async (req, res) => {
    try {
        const doctor = await Doctor.findById(req.params.id);
        if (!doctor) return res.status(404).json({ message: 'Dokter tidak ditemukan' });
        
        await doctor.remove();
        res.json({ message: 'Dokter berhasil dihapus' });
    } catch (err) {
        res.status(500).json({ message: err.message });
    }
});

// Start server
app.listen(5000, () => console.log('Server running on port 5000'));