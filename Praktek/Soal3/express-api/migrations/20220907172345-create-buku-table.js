'use strict';

module.exports = {
  async up(queryInterface, Sequelize) {
    await queryInterface.createTable('buku', {
      id: {
        type: Sequelize.INTEGER,
        primaryKey: true,
        autoIncrement: true,
        allowNull: false
      },
      judul: {
        type: Sequelize.STRING,
        allowNull: false
      },
      pengarang: {
        type: Sequelize.STRING(70),
        allowNull: false
      },
      penerbit: {
        type: Sequelize.STRING(100),
        allowNull: false
      },
      tahun: {
        type: Sequelize.INTEGER,
        allowNull: false
      },
      status: {
        type: Sequelize.ENUM('tersedia', 'pre order', 'tidak tersedia'),
        allowNull: false
      },
    });
  },

  async down(queryInterface, Sequelize) {
    await queryInterface.dropTable('buku');

  }
};
