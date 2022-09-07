module.exports = (sequelize, DataTypes) => {
    const buku = sequelize.define('buku', {
        id: {
            type: DataTypes.INTEGER,
            primaryKey: true,
            autoIncrement: true,
            allowNull: false
        },
        judul: {
            type: DataTypes.STRING,
            allowNull: false
        },
        pengarang: {
            type: DataTypes.STRING(70),
            allowNull: false
        },
        penerbit: {
            type: DataTypes.STRING(100),
            allowNull: false
        },
        tahun: {
            type: DataTypes.INTEGER,
            allowNull: false
        },
        status: {
            type: DataTypes.ENUM('tersedia', 'pre order', 'tidak tersedia'),
            allowNull: false
        },
    }, {
        tableName: 'buku'
    });


    return buku;
}