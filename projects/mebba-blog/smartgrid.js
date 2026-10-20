const smartgrid = require('smart-grid');

const settings = {
    columns: 12,
    offset: '20px',
    container: {
        maxWidth: '1240px',
        fields: '30px'
    },
    breakPoints: {
        lg: {
            width: "1440px",
        },
        mmd: {
            width: "1240px",
        },
        md: {
            width: "1024px",
        },
        sm: {
            width: "768px",
            fields: "15px",
            offset: "15px"
        },
        xs: {
            width: "580px",
        },
        xxs: {
            width: "370px"
        }
    },
    oldSizeStyle: false,
    mobileFirst: false
};

smartgrid('./src/less/libs', settings);