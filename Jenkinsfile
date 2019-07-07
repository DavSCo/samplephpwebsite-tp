// node {
//     triggers { 
//         cron('H * * * *') 
//     }

//     def commit_id
    
//     stage('Preparation') {
//         checkout scm
//         sh "git rev-parse --short HEAD > .git/commit-id"                        
//         commit_id = readFile('.git/commit-id').trim()
//     }
//     stage('build docker image') {
//         sh 'docker image build -t myapp:1.0 .'
//     }
    
// }

pipeline {
    agent any
    triggers {
        cron('H * * * *') 
    }
    stages {
        stage('Preparation') {
            steps {
                checkout scm
                sh "git rev-parse --short HEAD > .git/commit-id"                        
                commit_id = readFile('.git/commit-id').trim()
            }
        }
        stage('Build image docker') {
            steps {
                sh 'docker image build -t myapp:1.0 .'
            }
        }
    }
}