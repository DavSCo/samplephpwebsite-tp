node {
    // triggers { 
    //     cron('H * * * *') 
    // }

    def commit_id
    
    stage('Preparation') {
        checkout scm
        sh "git rev-parse --short HEAD > .git/commit-id"                        
        commit_id = readFile('.git/commit-id').trim()
    }
    stage('build docker image') {
        sh 'docker image build -t myapp:1.0 .'
    }
    stage('Test') {
        sh 'phpunit --filter siteNameIsOk FunctionsTest function.php'
    }
    
}
