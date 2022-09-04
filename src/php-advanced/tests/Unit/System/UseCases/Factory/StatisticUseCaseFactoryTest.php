<?php

namespace App\Tests\Unity\System\UseCases\Factory;

use App\Repository\TextRepository;
use App\System\UseCases\Factory\StatisticUseCaseFactory;
use App\System\UseCases\GetTextStatisticFromFileCase;
use App\System\UseCases\GetTextStatisticFromUrlUseCase;
use App\System\UseCases\GetTextStatisticUseCase;
use Doctrine\Persistence\ManagerRegistry;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\FileBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class StatisticUseCaseFactoryTest extends TestCase
{
    private SessionInterface $sessionMock;

    private Request $requestMock;

    private StatisticUseCaseFactory $statisticUseCaseFactory;

    public function setUp(): void
    {
        parent::setUp();

        $textRepositoryMock = $this->createMock(TextRepository::class);
        $managerRegistryMock = $this->createMock(ManagerRegistry::class);
        $httpClientMock = $this->getMockBuilder(HttpClientInterface::class)->getMock();

        $this->statisticUseCaseFactory = new StatisticUseCaseFactory(
            $textRepositoryMock,
            $managerRegistryMock,
            $httpClientMock
        );

        $this->sessionMock = $this->getMockBuilder(SessionInterface::class)->getMock();
        $this->requestMock = $this->createMock(Request::class);
    }

    public function test_get_use_case_with_text(): void
    {
        $this->requestMock->expects($this->exactly(2))
            ->method('get')
            ->with('text')
            ->willReturn('some text');

        $this->assertInstanceOf(
            GetTextStatisticUseCase::class,
            $this->statisticUseCaseFactory->getUseCase($this->requestMock, $this->sessionMock)
        );
    }

    public function test_get_use_case_with_url(): void
    {
        $this->requestMock->expects($this->exactly(3))
            ->method('get')
            ->with($this->logicalOr(
                $this->equalTo('text'),
                $this->equalTo('url')
            ))
            ->willReturnOnConsecutiveCalls('', 'https://example.com', 'https://example.com');

        $this->assertInstanceOf(
            GetTextStatisticFromUrlUseCase::class,
            $this->statisticUseCaseFactory->getUseCase($this->requestMock, $this->sessionMock)
        );
    }

    public function test_get_use_case_with_file(): void
    {
        $this->requestMock->expects($this->exactly(2))
            ->method('get')
            ->with($this->logicalOr(
                $this->equalTo('text'),
                $this->equalTo('url')
            ))
            ->willReturnOnConsecutiveCalls('', '');

        $this->requestMock->files = $this->createMock(FileBag::class);

        $fileMock = $this->createMock(UploadedFile::class);

        $this->requestMock->files->expects($this->exactly(2))
            ->method('get')
            ->with('file')
            ->willReturn($fileMock);

        $this->assertInstanceOf(
            GetTextStatisticFromFileCase::class,
            $this->statisticUseCaseFactory->getUseCase($this->requestMock, $this->sessionMock)
        );
    }

    public function test_get_use_case_without_inputs(): void
    {
        $this->requestMock->expects($this->exactly(2))
            ->method('get')
            ->with($this->logicalOr(
                $this->equalTo('text'),
                $this->equalTo('url')
            ))
            ->willReturnOnConsecutiveCalls('', '');

        $this->requestMock->files = $this->createMock(FileBag::class);

        $this->requestMock->files->expects($this->exactly(1))
            ->method('get')
            ->with('file')
            ->willReturn(null);

        $this->assertNull($this->statisticUseCaseFactory->getUseCase($this->requestMock, $this->sessionMock));
    }
}
