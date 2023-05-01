pipeline {
    agent any
    stages {
        stage('Build Docker Image') {
            steps {
                sh 'docker build -t redlock-web-2.0 .'
            }
        }
    }
    post {
        always {
            archiveArtifacts artifacts: 'Dockerfile'
        }
    }
}