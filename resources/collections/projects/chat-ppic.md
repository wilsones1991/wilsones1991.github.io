---
title: "ChatPPIC"
image: "chat-ppic.png"
technologies: ["React", "Laravel", "TypeScript", "Python", "AWS"]
---
ChatPPIC is a RAG-enhanced AI chatbot that answers the general public's questions about California public opinion based on extensive surveys from the [Public Policy Institute of California (PPIC)](https://ppic.org). I led a team of designers and engineers that built the Laravel/React web application from scratch. I developed custom hooks to call AWS Bedrock's RetrieveAndGenerate API and allowed users to configure custom hyperparameters depending on the foundation model they selected.

One of the main challenges with this project was cleaning and preparing the dataset for RAG ingestion. After scraping PPIC's website, I wrote custom scripts to tag metadata, including titles and dates, that helped the foundation model generate better source material. We also implemented reranking to help improve the accuracy and relevancy of the generated responses.