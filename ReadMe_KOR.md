![alt text](https://raw.githubusercontent.com/navcoindev/navcoin-media/master/logo/logo-extended.png "NavCoin")

NavCoin Stake Box 공식 github 저장소입니다. 이 저장소는 navcoin 데몬과 PHP 웹 지갑 기반으로 실행되는 라스베리 파이 구축 매뉴얼 입니다.

아래 링크 주소에서 라스베리 파이 이미지를 다운로드 할 수 있습니다.

http://www.navcoin.org/downloads

다음은 NavPi를 설정할 때 구현할 수 있는 몇 가지 기본 보안 구성입니다. SD 카드에 이미지를 설치하여 네트워크에 연결하고,  켜게되면 NavPi가 즉시 작동합니다.

## 이미지 설치(SD Card)
### OSX

- FAT (MSDOS) 형식과 GUID 파티션 맵 스키마를 선택하여 SD 카드를 포맷하세요
- Etcher 다운로드 및 설치 : https://etcher.io
- Nav Pi 이미지(img)를 SD 카드에 구우려면 Etchers 참고하여 설치하세요.

Windows 및 Linux

설치 방법(raspberrypi)은 공식 문서 참고하여 설치하세요

https://www.raspberrypi.org/documentation/installation/installing-images

## 기본값

| Item         | Value        |
|:-------------|:-------------|
| Unix Username | pi |
| Unix Password | navpi101 |
| Web Password  | nav |

기본 설정으로 이미지를 제공하기 때문에 주의가 필요하며 다음과 같이 예방 조치를 하시기 바랍니다.

## 설정

SSH는 보안을 위해 사용할 수 없으며, 모든 장치 설정을 직접 수행 해야 합니다.

- 이미지(img)파일을 SD 카드에 설치하고
- SD 카트를 Raspberry Pi에 넣습니다.
- 스크린, 키보드 및 마우스를 연결하십시오.
- 라즈베리파이의 전원을 켭니다.

## Wi-Fi 사용

Wi-Fi는 동기화가 매우 느릴 수 있으므로 Ethernet(유선)을 사용을 권장하며 WiFi를 사용해야 하는 경우에는 장치의 그래픽 사용자 인터페이스를 통해 설정할 수 있습니다.

- Raspberry Pi GUI 운영 체제로 부팅 하세요.
- 오른쪽 상단 작업 표시 줄의 네트워크 아이콘을 마우스 오른쪽 단추로 클릭하십시오.
- WiFi 구성 설정을 추하세요.

## 로컬 IP 주소에 대한 NavPi Web 액세스 제한

NavPi는 기본적으로 IP 주소 범위에 고정되어 있습니다 :

192.168.xx 
172.16.xx 
10.10.xx

로컬 네트워크는 외부에서 WEB UI에 액세스하는 모든 사용자가 차단됩니다. 로컬 네트워크 기본 값과 다른 IP 범위에 있거나 특정 IP 주소로 웹 액세스를 하게 하려면, 다음을 수행하십시오:

- Raspberry Pi GUI 운영 체제로 부팅 하세요.
- Terminal(터미널)를 실행하세요.
- `sudo leafpad /etc/apache2/sites-available/navpi.conf`  입력 후 실행(Enter)하세요.
- `<VirtualHost *:80>` 섹션을 찾으세요.
- `Require ip XXX.XXX` 위치에 허용 할 IP 주소 또는 범위를 추가, 제거 또는 수정하세요.
- `<VirtualHost *:443>` 섹션에도 위와 같이 `Require ip` 를  동일하게 수정하세요.
- 파일을 저장하고 닫습니다.
- `sudo service apache2 reload` 입력 후 실행(Enter)하세요.

## 기본 유닉스 암호 변경

- Raspberry Pi GUI 운영 체제로 부팅하세요.
- Terminal(터미널)를 실행하세요.
- `passwd` 입력 후 실행 (Enter) 하세요.
- 현재 암호로 `navpi101` 를 입력 하세요.
- 사용 중인 암호를 입력하세요
- 새로운 암호를 입력하세요
- 새로운 암호를 다시 입력하세요
- 새 SSL 인증서 만들기

## 새로운 SSL인증 생성

NavPi는 기본 SSL 인증서가 설치되어 제공되지만 설치시 새 인증서를 생성 할 수 있습니다.

Terminal(터미널)을 열고 다음 명령을 붙여 넣으세요:

`sudo openssl req -x509 -nodes -days 3650 -newkey rsa:2048 -out /etc/apache2/ssl/navpi-ssl.crt -keyout /etc/apache2/ssl/navpi-ssl.key`

아래를 참고하여 세부 정보를 입력하십시오.

Country Name(국가 이름) : 뉴질랜드

State or Province Name(시 /도 이름) : Auckland

Locality Name(지역 이름) : Auckland

Organization Name:(조직 이름) : NavCoin

Organizational Unit Name(조직 단위 이름) : Nav Pi

Common Name(일반 이름) : my.navpi.org

Email Address(이메일 주소) : admin@navcoin.org

그런 다음 웹서버를  재시작 합니다.

`sudo systemctl daemon-reload`

`sudo service apache2 reload`

NavPi  IP 주소로 접속 시 새로운 인증서를 사용하기에 HTTPS가 강제로 실행됩니다.

자체 서명 인증서이기 때문에 브라우저가 여전히 안전하지 않다고 나오지만, 브라우저를 통한 NavPi와의 모든 통신은 암호화되어 있어서 
아무도 자신의 암호를 가로 챌 수 없습니다.

## NavPi IP 주소 찾기

- Raspberry Pi GUI 운영 체제로 부팅 하세요.
- Terminal(터미널)를 실행하세요.
- `ifconfig` 를 입력하세요.
- IP주소를 찾으세요 `inet addr` (ex : 192.168.1.99).
- 웹 브라우저 (Firefox, Chrome, Internet Explorer, Safari)를 실행하세요.
- 인터넷 브라우저 주소에 IP주소를 입력하세요(ex : http://192.168.1.99)
- 기본 암호를 `nav` 입력하여 NavPi Web에 로그인 하세요.

## 기본 웹 인터페이스 암호 변경

- NavPi Web 로그인하세요.
- `Control  메뉴 항목을 선택
- `Server` 섹션에 `Change UI Password` 버튼을 누릅니다.
- 사용 중인 암호를 입력하세요
- 새로운암호를 입력하세요
- 새로운 암호를 다시 입력하세요

## 지갑 암호화

- NavPi Web 로그인 하세요.
- `Control` 메뉴 항목 선택
- `Security` 섹션 옆에 있는 입력란에 원하는 암호를 입력 후 `Encrypt Wallet` 버튼 누르세요.
- enter 키를 누르거나 `Encrypt Wallet` 버튼을 클릭하세요.
- 새 암호를 입력하세요.

## 지갑 백업

- NavPi Web 로그인 하세요.
- `Control` 메뉴 항목을 선택.
- `Security` 섹션을 선택하여 `Backup Wallet` 버튼을 누릅니다.
- 다운로드 저장하세요.
- 데이터 손상을 방지하기 위해, 여러 번 백업을 하세요.

## 지갑 복원

- Raspberry Pi GUI 운영 체제로 부팅 하세요.
- Terminal(터미널)를 실행하세요.
- USB 메모리 스틱에서 있는 wallet.dat 파일을 navpi의 바탕 화면으로 복사하세요.
- 터미널에서 `sudo mv /home/pi/Desktop/wallet.dat /home/stakebox/.navcoin4/wallet.dat` 를 입력하고 Enter 키를 실행하세요.
- sudo 암호를 변경하지 않았다면 `navpi101`를 입력 후 실행(Enter)하세요.
- navcoin(데몬)이 wallet.dat에 접근 권한을 주기 위해 아래와 같이 실행하세요
- `sudo chown www-data:www-data /home/stakebox/.navcoin4/wallet.dat`을 입력하고 Enter 키를 누릅니다.
- navpi를 재부팅하기 위해 `sudo reboot now` 를 입력 후 실행(Enter)하세요.

## 백업 이미지 만들기

이 모든 설정을 완료하면 SD 카드의 백업 이미지를 만들 가치가 있으므로 실패하면 쉽게이 시점으로 복원 할 수 있습니다.

### OSX

- disk utility(디스크 유틸리티)를 사용하여 전체 SD Card의 .dmg를 만듭니다.
- Terminal(터미널)에서 dmg를 img로 변환하세요
`hdiutil convert foo.dmg -format UDTO -o bar.img`

Etcher 사용하여  .img 파일을 새 SD Card에 burn(구울) 수 있습니다.

## 사용자 인터페이스 업데이트

- Raspberry Pi GUI 운영 체제로 부팅 하세요.
- Terminal(터미널)를 실행하세요.
- `cd /home/stakebox/UI` 입력하고 실행(Enter)하세요.
- `git pull` 입력 후 실행(Enter)하세요.
- UI 업데이트를 받게 됩니다.



