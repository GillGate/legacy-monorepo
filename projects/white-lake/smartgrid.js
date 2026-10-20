const smartgrid = require('smart-grid');

const settings = {
    columns: 12,
    offset: '30px',
    container: {
        maxWidth: '1400px',
        fields: '70px'
    },
    breakPoints: {
        md: {
            offset: "20px",
            width: "1440px",
            fields: "150px"
        },
        mmd: {
            width: "1024px",
            fields: "30px"
        },
        sm: {
            width: "720px",
            fields: "10px"
        },
        xs: {
            width: "540px",
            fields: "5px"
        }
    },
    oldSizeStyle: false,
    mobileFirst: false
};

smartgrid('./src/less/libs', settings);