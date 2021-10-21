### 1. Build frontend
```bash
cd packages
yarn build
cd relevance-testing
cp .env.development .env
```
replace `VUE_APP_METAPARAMS_BACKEND_ENDPOINT=http://localhost:92`